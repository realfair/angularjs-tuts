<!DOCTYPE html>  
 <!-- index.php !-->  
 <html>  
      <head>  
           <title>Webslesson Tutorial | AngularJS Tutorial with PHP - Insert Data into Mysql Database</title>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>  
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:500px;">  
                <h3 align="center">AngularJS Tutorial with PHP - Insert Data into Mysql Database</h3>  
                <div ng-app="myapp" ng-controller="usercontroller" ng-init="displayData()">  
                     <label>First Name</label>  
                     <input type="text" name="first_name" ng-model="firstname" class="form-control" />  
                     <br />  
                     <label>Last Name</label>  
                     <input type="text" name="last_name" ng-model="lastname" class="form-control" />  
                     <br />  
                     <input type="submit" name="btnInsert" class="btn btn-info" ng-click="insertData()" value="ADD"/>
                     <br /><br />  
                     <table class="table table-bordered">  
                          <tr>  
                               <th>First Name</th>  
                               <th>Last Name</th>
                               <th>Action</th>
                          </tr>  
                          <tr ng-repeat="x in names">  
                              <td>{{x.first_name}}</td>  
                               <td>{{x.last_name}}</td>
                               <td>
                                 <button class="btn btn-danger">
                                   DELETE
                                 </button>
                               </td>  
                          </tr>  
                     </table>
                </div>   
           </div>
           <script src="scripts/index.js"></script>
      </body>  
 </html> 