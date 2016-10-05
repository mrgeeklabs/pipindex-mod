<?php
/*
    FILE:     salesforce.php [Copyright 2014 Redstrand Ltd. All rights reserved.]
    VERSION :   1.0
    DESCRIPTION:  Salesforce Rest API Helper Class
    WRITTEN BY:   Jonathan Plunkett

    MODIFICATIONS :
    Date          Who     Version Change
    ------------  ------- ------- -------------------------------------------------------
    04 APR 2014   JP      1.0     Created
*/
class SalseforceHelper {
    // Variables
    var $AuthorizationToken = "";
    var $InstanceURL = "";

    // Constructor
    function __construct(){
        // Initialise a connection to Salesforce
        $this->GetAuthorization();
    }

    // Get Authorization Token from Salesforce
    private function GetAuthorization() {
        try {
            // Get values from config
            require_once( $_SERVER['DOCUMENT_ROOT'] . '/new_includes/config.php');

            $token_url = SALESFORCE_LOGIN_URI . "/services/oauth2/token";

            $params = "grant_type=password"
                . "&client_id=" . SALESFORCE_CLIENT_ID
                . "&client_secret=" . SALESFORCE_CLIENT_SECRET
                . "&username=" . SALESFORCE_USERNAME
                . "&password=" . SALESFORCE_PASSWORD . SALESFORCE_SECURITY_TOKEN;

            $curl = curl_init($token_url);
            curl_setopt($curl, CURLOPT_HEADER, false);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $params);

            $json_response = curl_exec($curl);

            $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);

            if ($status != 200) {
                throw new Exception("Error: call to token URL $token_url failed with status $status, response $json_response, curl_error " . curl_error($curl) . ", curl_errno " . curl_errno($curl));
            }

            curl_close($curl);

            $response = json_decode($json_response, true);

            $this->AuthorizationToken = $response['access_token'];
            $this->InstanceURL = $response['instance_url'];
        } catch (Exception $ex) {
            throw new Exception('Could not connect to Salesforce to get Authorization Token. ' . $ex->GetMessage(), 0, $ex);
        }
    }

    // Preform SOQL query
    public function Query($query) {
        $url =  "$this->InstanceURL/services/data/v25.0/query?q=" . urlencode($query);

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_HTTPHEADER,
            array("Authorization: OAuth $this->AuthorizationToken"));

        $json_response = curl_exec($curl);
        curl_close($curl);

        return json_decode($json_response, true);
    }

    // Get Lead
    public function GetLead($id) {
        $url = "$this->InstanceURL/services/data/v25.0/sobjects/Lead/$id";

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_HTTPHEADER,
            array("Authorization: OAuth $this->AuthorizationToken"));

        $json_response = curl_exec($curl);

        $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);

        if ( $status != 200 ) {
            throw new Exception("Error: call to URL $url failed with status $status, response $json_response, curl_error " . curl_error($curl) . ", curl_errno " . curl_errno($curl));
        }

        curl_close($curl);

        return json_decode($json_response, true);
    }

    // Find Lead by Email
    public function FindLeadByEmail($email) {
        $query = "SELECT Id, Event_Analytics__c, Page_Analytics__c, Phone, Phone_2__c FROM Lead WHERE Email = '" . $email . "'";
        return $this->Query($query);
    }

    // Create Lead
    public function CreateLead($newLead) {
        $url = "$this->InstanceURL/services/data/v25.0/sobjects/Lead/";

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_HTTPHEADER,
            array("Authorization: OAuth $this->AuthorizationToken",
                "Content-type: application/json"));
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($newLead));

        $json_response = curl_exec($curl);

        $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);

        if ( $status != 201 ) {
            throw new Exception("Error: call to URL $url failed with status $status, response $json_response, curl_error " . curl_error($curl) . ", curl_errno " . curl_errno($curl));
        }

        curl_close($curl);

        $response = json_decode($json_response, true);

        if (!$response['success']) {
            throw new Exception("Error: Did not get success response as expected. response $json_response");
        }

        return $response["id"];
    }

    // Update Lead
    public function UpdateLead($id, $lead) {
        $url = "$this->InstanceURL/services/data/v25.0/sobjects/Lead/" . $id;

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_HTTPHEADER,
            array("Authorization: OAuth $this->AuthorizationToken",
                "Content-type: application/json"));
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PATCH");
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($lead));

        curl_exec($curl);

        $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);

        if ( $status != 204 ) {
            throw new Exception("Error: call to URL $url failed with status $status, response $json_response, curl_error " . curl_error($curl) . ", curl_errno " . curl_errno($curl));
        }

        curl_close($curl);
    }

    // Get Lead Metadata
    public function GetLeadMetadata() {
        $url = "$this->InstanceURL/services/data/v25.0/sobjects/Lead/describe";

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_HTTPHEADER,
            array("Authorization: OAuth $this->AuthorizationToken"));

        $json_response = curl_exec($curl);
        curl_close($curl);

        return json_decode($json_response, true);
    }
}