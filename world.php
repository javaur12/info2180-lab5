<?php
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'world';

$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
$country =0;
$context =0;
echo $country =$_GET['country'];
echo $context =$_GET['context'];

// //lookup country wise
if($country && !$context){


  // fetch query
  function fetch_data(){
   global $conn;
   $stmt = $conn->prepare("SELECT * FROM countries WHERE name LIKE ?");
   $stmt->execute(["%$_GET[country]%"]);
   $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
   
    return $results;
  }
  $fetchData= fetch_data();
  
  
  function show_data($fetchData){
   echo '<table border="1">
          <tr>
              <th>S.N</th>
              <th>Country Name</th>
              <th>Continent</th>
              <th>Independence Year</th>
              <th>Head of state</th>
             
          </tr>';
  
   if(count($fetchData)>0){
        $sn=1;
        foreach($fetchData as $data){ 
  
    echo "<tr>
            <td>".$sn."</td>
            <td>".$data['name']."</td>
            <td>".$data['continent']."</td>
            <td>".$data['independence_year']."</td>
            <td>".$data['head_of_state']."</td>
  
            
     </tr>";
         
    $sn++; 
       }
  }else{
       
    echo "<tr>
          <td colspan='7'>No Data Found</td>
         </tr>"; 
  }
    echo "</table>";
  }
  show_data($fetchData);
  }
// //country and city wise
if ($country && $context == 'cities'){
  // fetch query
function fetch_data(){
  global $conn;
  $stmt = $conn->prepare("SELECT countries.code,countries.name,cities.district,cities.population FROM countries LEFT JOIN cities ON countries.code = cities.country_code WHERE countries.name LIKE ? ");
 
 // $stmt->execute($country, $context);
  //$stmt->bind_param("ss",$country, $context);
  $stmt->execute(["%$_GET[country]%"]);
  //$stmt->execute($data);
   //$stmt->execute();
  $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
   
   return $results;
 }
 $fetchData= fetch_data();
 
 
 function show_data($fetchData){
  echo '<table border="1">
         <tr>
             <th>S.N</th>
             <th>Name</th>
             <th>District</th>
             <th>Population</th>
            
            
         </tr>';
 
  if(count($fetchData)>0){
       $sn=1;
       foreach($fetchData as $data){ 
 
   echo "<tr>
           <td>".$sn."</td>
          
           <td>".$data['name']."</td>
           <td>".$data['district']."</td>
           <td>".$data['population']."</td>

 
           
    </tr>";
        
   $sn++; 
      }
 }else{
      
   echo "<tr>
         <td colspan='7'>No Data Found</td>
        </tr>"; 
 }
   echo "</table>";
 }
 show_data($fetchData);
} 





?>