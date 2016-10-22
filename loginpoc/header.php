<header>

	<!--- New Top Add -->
	<div style="width:100%; background:#333333;">

		<div class="top-menu">
			<h1><a href="http://www.pipindex.com"><img src="/images/logo-pipindex-white.gif" alt="PipIndex"></a></h1>
			<div class="top-btn-zone">
				<div class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="caret">Language</span></a>
					<ul class="dropdown-menu" role="menu">
						<?php foreach($site_langs as $key=>$value){?>
						<li><a href="<?php echo langLink($lang,$key,"http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");?>"><span class="es"><?php echo $value;?></span></a></li>
						<?php }?>
					</ul> 
				</div>

				<div class="ma-btn-zone"><a href="http://clients.pipindex.com"><div class="ma-btn-bg"><span>My Account</span></div></a></div>
				<p style="clear:both; margin-top:0px;"></p>
				<div class="marBot4"><a href="http://clients.pipindex.com/"><div class="button-linkLive"><div>Open a</div><div>LIVE ACCOUNT</div></div></a></div>
				<div class="marBot4"><a href="/open-demo-account-pip-index.html"><div class="button-linkDemo"><div>Open a</div><div>DEMO ACCOUNT</div></div></a></div>
			</div>
            <div class="capital-txt">* Your capital is at risk.</div>
		</div>

		<div class="top-menu-zone">
			<nav>
				<ul class="sf-menu">
					<li><a href="/account-types-benefits.html"><span></span>Accounts<strong></strong></a>
						<ul class="submenu">
							<li><a href="/open-demo-account-pip-index.html">Open a Demo Account</a></li>
							<li><a href="http://clients.pipindex.com/">Open a Live Account</a></li>	
							<li><a href="/platinum-live-account.html">Open a Platinum Account</a></li>
							<li><a href="http://pipindex.com/pipindex-for-mac.php">PipIndex for Mac</a></li>							
							<li><a href="/account-types-benefits.html">Account Type Benefits</a></li>
							<li><a href="/new-customer-bonus.html">New Customer Bonus</a></li>
							<li><a href="/friend-referral-programme.html">Friend Referral Programme</a></li>
						</ul>
					</li>
					<li><a href="/platform-demonstration.html">Learn to Trade with Confidence<strong></strong></a>
						<ul class="submenu" style="width:270px !important;">
							<li><a href="/platform-demonstration.html">PipIndex MetaTrader (MT4)</a></li>
							<li><a href="/traders-club.html">Traders Club</a></li>	
							<li><a href="/pro-traders-club.html">Pro Traders Club</a></li>
						</ul>
					</li> 
					<li><a href="/trading-conditions.html">Markets<strong></strong></a>
						<ul class="submenu">
							<!--<li><a href="currencies.html">Range of Markets – Over 500</a></li>-->
							<li><a href="/trading-conditions.html">Trading Conditions</a></li>
                            <li><a href="/market-opening-hours.php">Market Opening Hours</a></li>
                            <li><a href="/market-expiration.php">Market Expiration</a></li>
                            <!--<li><a href="currencies.html">Currencies</a></li>
                            <li><a href="metals.html">Precious Metals</a></li>	
                            <li><a href="commodities.html">Commodities</a></li>
                            <li><a href="indices.html">Indices</a></li>
                            <li><a href="equities.html">Equities</a></li>
                            <li><a href="bonds.html">Bonds</a></li>
                            <li><a href="trading-conditions.html">Trading Conditions</a></li>-->
						</ul>
					</li>
                    <li><a href="/range-of-markets.html"><span></span>Why PipIndex?</a>
						<ul class="submenu">
                            <li><a href="/range-of-markets.html">Range of Markets</a></li>
                            <li><a href="/tight-spreads.html">Tight Spreads</a></li>	
                            <li><a href="/speed-of-execution.html">Speed of Execution - STP</a></li>
                            <!--<li><a href="capital-protection.html">Capital Protection</a></li>-->
                            <li><a href="/pip-index-support.html">Unparalleled Support</a></li>
                            <li><a href="/who-we-are.html">About PipIndex</a></li>
                            
                            <li><a href="safety-of-funds.html">Safety of Funds</a></li>														
						</ul>
					</li>
					<li><a href="/glossary.html">Resources<strong></strong></a>
						<ul class="submenu">
                            <li><a href="/full-mt4-specification.html">Full MT4 Specification</a></li>
                            <li><a href="/glossary.html">Glossary</a></li>
                            <li><a href="/contract-types.html">Contract types</a></li>	
                            <li><a href="/cookie-policy.html">Cookie Policy</a></li>
                            <li><a href="/risk-warning.html">Risk Warning</a></li>
                            <li><a href="/privacy-policy.html">Privacy Policy</a></li>
                            <li><a href="/terms-and-conditions.html">Terms & Conditions</a></li>
                            <li><a href="http://www.pipindex.com/doc/Terms-of-Third-Party-Payments-PolicyPipIndex.pdf" target="_blank">Third Party Payment</a></li>
							<li><a href="http://www.pipindex.com/dev/doc/Pip-Order-Execution-Policy.pdf" target="_blank">Order Execution Policy</a></li>
                            <li><a href="http://www.pipindex.com/doc/Conflicts-of-Interest-PIPINDEX.pdf" target="_blank">Conflict of Interest Policy</a></li>
							<li><a href="http://www.pipindex.com/doc/scalping-policy.pdf" target="_blank">Scalping Policy</a></li>
							<li><a href="http://www.pipindex.com/doc/dormant-accounts-policy-pip-index.pdf" target="_blank">Dormant Accounts Policy</a></li>
							<li><a href="/complaints-procedure.html">Complaints Procedure</a></li>
							<li><a href="#">Limited Power of Attorney</a>
							<ul>
							<li><a href="http://www.pipindex.com/doc/limited-power-of-attorney.pdf" target="_blank">Policy</a></li>
							<li><a href="http://www.pipindex.com/doc/lpoa.pdf" target="_blank">Form</a></li>	
							</ul>
							</li>
							<li><a href="http://www.pipindex.com/doc/deposit-and-withdrawal-policy.pdf" target="_blank">Deposits and Withdrawals</a></li>
							<li><a href="http://www.pipindex.com/doc/joint-account-formv2.pdf" target="_blank">Joint Account Form</a></li>
							<li><a href="/site-map.html">Site Map</a></li>
						</ul>
					</li>
					<!--<li><a href="/partners.php">Partners<strong></strong></a></li>-->
					<li id="last-li"><a href="/contact.html">CONTACTS<strong></strong></a>
                    	<ul class="submenu" style="width:120px !important;">
							<li><a href="/contact.html">contact details</a></li>				
							<!--<li><a href="/company-seeking-finance.php">Venture Capital</a></li>-->
							<li><a href="/careers.php">Careers<strong></strong></a></li>
						</ul>
					</li>
				</ul>
			</nav>
		</div>

	</div>
	<!--- New Top Add --->
						
</header>