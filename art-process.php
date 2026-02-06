<?php 

include 'data.inc.php';

?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="utf-8">
    <title>Chapter 12</title>   
    
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/styles.css" />
</head>
<body>

   
<main>
    <section class="results">

    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  
    // Access data using $_POST['name_of_input']
?>

 

    
    <table>
      <caption class="results__caption">Art Work Saved</caption>
      <tr>
        <td class="results__label">Title</td>    
        <td class="results__value"> </td> 
      </tr>
      <tr>
        <td class="results__label">Description</td>    
        <td class="results__value"> </td> 
      </tr>
      <tr>
        <td class="results__label">Genre</td>    
        <td class="results__value"> </td> 
      </tr>
      <tr>
        <td class="results__label">Subject</td>    
        <td class="results__value"> </td> 
      </tr>
      <tr>
        <td class="results__label">Medium</td>    
        <td class="results__value"> </td> 
      </tr>   
      <tr>
        <td class="results__label">Year</td>    
        <td class="results__value"> </td> 
      </tr>  
      <tr>
        <td class="results__label">Museum</td>    
        <td class="results__value"> </td> 
      </tr>          
    </table>
    
    <?php 
    
}

else {
  echo "no form data .... go to form and enter data" ;
}

    ?>
  
    </section>
</main>       
</body>
</html>
