<?php
/**
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package SYSTEM
 */

header("Content-Type: text/html; charset=utf-8");

/**
 * **Παραδείγματα Κλήσης**
 * 
 * Παρακάτω εμφανίζεται μια σειρά από παραδείγματα κλήσης της συνάρτησης με διάφορους τρόπους :
 * <br><a href="#cURL">cURL</a> | <a href="#JavaScript">JavaScript</a> | <a href="#PHP">PHP</a> | <a href="#Ajax">Ajax</a>
 * 
 * <a id="cURL"></a>Παράδειγμα κλήσης της μεθόδου με <b>cURL</b> (console) :
 * <code>
 *    curl -X `METHOD` https://mm.sch.gr/api/`ROUTE_API_NAME` \
 *       -H "Content-Type: application/json" \
 *       -H "Accept: application/json" \
 *       -u username:password \
 *       -d '{"param_name_1": "param_value_1",
 *            "param_name_2": "param_value_2",
 *            .
 *            .
 *            "param_name_n": "param_value_n"
 *           }'
 * </code>
 * <br>
 *
 *
 *
 * <a id="JavaScript"></a>Παράδειγμα κλήσης της μεθόδου με <b>JavaScript</b> :
 * <code>
 * <script>
 *    var params = JSON.stringify({"param_name_1": "param_value_1,",
 *                                 "param_name_2": "param_value_2,"
 *                                 .
 *                                 .
 *                                 "param_name_n": "param_value_n"});
 *
 *    var http = new XMLHttpRequest();
 *    http.open("`METHOD`", "https://mm.sch.gr/api/`ROUTE_API_NAME`");
 *    http.setRequestHeader("Accept", "application/json");
 *    http.setRequestHeader("Content-type", "application/json; charset=utf-8");
 *    http.setRequestHeader("Content-length", params.length);
 *    http.setRequestHeader("Authorization", "Basic " + btoa('username' + ':' + 'password') );
 *
 *    http.onreadystatechange = function()
 *    {
 *        if(http.readyState == 4 && http.status == 200)
 *        {
 *            var result = JSON.parse(http.responseText);
 *            document.write(result.status + " : " + result.message);
 *        }
 *    }
 *
 *    http.send(params);
 * </script>
 * </code>
 * <br>
 *
 *
 *
 * <a id="PHP"></a>Παράδειγμα κλήσης της μεθόδου με <b>PHP</b> :
 * <code>
 * <?php
 * header("Content-Type: text/html; charset=utf-8");
 *
 * $params = array("param_name_1"=> "param_value_1",
 *                 "param_name_2"=> "param_value_2",
 *                 .
 *                 .
 *                 "param_name_n"=> "param_value_n"
 *                 );
 *
 * $curl = curl_init("https://mm.sch.gr/api/`ROUTE_API_NAME`");
 *
 * curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
 * curl_setopt($curl, CURLOPT_USERPWD, "username:password");
 * curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "`METHOD`");
 * curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode( $params ));
 * curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
 *
 * $data = curl_exec($curl);
 * $data = json_decode($data);
 * echo "<pre>"; var_dump( $data ); echo "</pre>";
 * ?>
 * </code>
 * <br>
 *
 * 
 * 
 * <a id="Ajax"></a>Παράδειγμα κλήσης της συνάρτησης με <b>Ajax</b> :
 * <code>
 * <script>
 *    $.ajax({
 *        type: '`METHOD`',
 *        url: 'https://mm.sch.gr/api/`ROUTE_API_NAME`',
 *        dataType: "json",
 *        data: {
 *        "param_name_1": "param_value_1",
 *        "param_name_2": "param_value_2",
 *        .
 *        .
 *        "param_name_n": "param_value_n"
 *        },
 *        beforeSend: function(req) {
 *            req.setRequestHeader('Authorization', btoa('username' + ":" + 'password'));
 *        },
 *        success: function(data){
 *            console.log(data);
 *        }
 *    });
 * </script>
 * </code>
 * <br>
 * 
 */

class ApiRequestExamples {}

?>