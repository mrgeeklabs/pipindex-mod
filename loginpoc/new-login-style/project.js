/**
 * Interstate Analytics
 *
 * Created: Sep 22, 2016 01:52:59 +0000
 * Project: 99865132d8a314ce9c6c703f28e46b01dbb1b7f4
 */
this.interstate = (function(asyncCalls) {
  var interstate = {};
  interstate.passedData = {};
  
  interstate.singletons = [];

  interstate.singletons.push("async");

interstate.async = {};

interstate.async.runAllAsyncCalls = function(calls) {
  for (var i = 0; i < calls.length; i++) {
    interstate.api.callApi(calls[i]);
  }
};

  interstate.singletons.push("stub");

interstate.stub = {};

interstate.stub.initialize = function() {
  this.export = {
    alias: interstate.util.bind(interstate.stub.oneParamFunction, interstate.stub),
    identify: interstate.util.bind(interstate.stub.oneParamFunction, interstate.stub),
    push: interstate.util.bind(interstate.stub.oneParamFunction, interstate.stub),
    track: interstate.util.bind(interstate.stub.twoParamFunction, interstate.stub),
    trackGoal: interstate.util.bind(interstate.stub.twoParamFunction, interstate.stub),
    trackPurchase: interstate.util.bind(interstate.stub.twoParamFunction, interstate.stub),
    trackVisit: interstate.util.bind(interstate.stub.zeroParamFunction, interstate.stub),
    trackEvent: interstate.util.bind(interstate.stub.twoParamFunction, interstate.stub),
    getIdentifier: interstate.util.bind(interstate.stub.zeroParamFunction, interstate.stub),
    getLogHistory: interstate.util.bind(interstate.stub.zeroParamFunction, interstate.stub),
    setLogLevel: interstate.util.bind(interstate.stub.oneParamFunction, interstate.stub),
    getAliases: interstate.util.bind(interstate.stub.zeroParamFunction, interstate.user)
  }
};

interstate.stub.zeroParamFunction = function() {
};

interstate.stub.oneParamFunction = function(one) {
};

interstate.stub.twoParamFunction = function(one, two) {
};

  interstate.singletons.push("util");

interstate.util = {};

interstate.util.bind = function(fn, selfObj, varArgs) {
  if (!fn) {
    throw new Error();
  }

  if (arguments.length > 2) {
    var boundArgs = Array.prototype.slice.call(arguments, 2);
    return function() {
      // Prepend the bound arguments to the current arguments.
      var newArgs = Array.prototype.slice.call(arguments);
      Array.prototype.unshift.apply(newArgs, boundArgs);
      return fn.apply(selfObj, newArgs);
    };

  } else {
    return function() {
      return fn.apply(selfObj, arguments);
    };
  }
};

interstate.util.contains = function(arr, obj) {
  var i = arr.length;
  while (i--) {
    if (arr[i] === obj) {
      return true;
    }
  }
  return false;
};

interstate.util.urlParams = function() {
  var hash = {};
  var pageURL = window.location.search.substring(1);
  if (pageURL) {
    var urlVariables = pageURL.split('&');
    for (var i = 0; i < urlVariables.length; i++) {
      var parameter = urlVariables[i].split('=');
      if (parameter.length === 2){
        hash[parameter[0]] = decodeURIComponent(parameter[1].replace(/\+/g, '%20'));
      }
    }
  }
  return hash;
};

interstate.util.getQueryParameter = function(name) {
  return decodeURIComponent((new RegExp('[?|&]' + name + '=' + '([^&;]+?)(&|#|;|$)').exec(location.search)||[,""])[1].replace(/\+/g, '%20'))||null;
};

/**
 * Returns true if the specified value is defined and not null.
 * @param {?} val Variable to test.
 * @return {boolean} Whether variable is defined and not null.
 */
interstate.util.isDefAndNotNull = function(val) {
  // Note that undefined == null.
  return val != null;
};

interstate.util.isNumber = function(n) {
  return interstate.util.isDefAndNotNull(n) && !isNaN(parseFloat(n)) && isFinite(n);
};

interstate.util.keys = function(obj) {
  var result = [];
  for (var key in obj) {
    if (obj.hasOwnProperty(key)) {
      result.push(key)
    }
  }
  return result;
};

interstate.util.extendObjects = function(obj) {
  var length = arguments.length;
  if (length < 2 || obj == null) {
    return obj;
  }

  for (var index = 1; index < length; index++) {
    var source = arguments[index];
    for (var key in source) {
      if (source.hasOwnProperty(key)) {
        obj[key] = source[key];
      }
    }
  }

  return obj;
};

interstate.util.randomGUID = function() {
  var s4 = function() {
    return Math.floor((1 + Math.random()) * 0x10000)
        .toString(16)
        .substring(1);
  };
  return s4() + s4() + '-' + s4() + s4() + '-' + s4() + s4() + '-' + s4() + s4();
};

  for (var i = 0; i < interstate.singletons.length; i++) {
  var singleton = interstate[interstate.singletons[i]];
  if (singleton && singleton.initialize) {
    singleton.initialize();
  }
}

interstate.async.runAllAsyncCalls(asyncCalls);

for (var j = 0; j < interstate.singletons.length; j++) {
  var startingSingleton = interstate[interstate.singletons[i]];
  if (startingSingleton && startingSingleton.start) {
    startingSingleton.start();
  }
}
;


  return interstate.stub.export;
}).call({}, this.interstate || []);
