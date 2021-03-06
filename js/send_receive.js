
function php_function_call(
  functionName,
  argumentArray,
  directPhpFunc = null,
  callbackFunc = null
) {
  var promiseObj = new Promise(function (resolve, reject) {
    jQuery.ajax({
      type: "POST",
      url: ajax_unique.ajaxurl,
      dataType: "json",
      data: {
        action: "php_function_call",
        title: ajax_unique.title,
        functionname: functionName,
        directPhpFunc: directPhpFunc,
        arguments: argumentArray,
      },

      success: function (obj, textstatus) {
        if (callbackFunc != null) {
          // console.log("about to call:" + callbackFunc );
          // window[callbackFunc](arguments);
        }
        resolve(obj);
        return obj;

        if (!("error" in obj)) {
          yourVariable = obj.result;
        } else {
          console.log(obj.error);
        }
      },
    });
  });
  return promiseObj;
}
