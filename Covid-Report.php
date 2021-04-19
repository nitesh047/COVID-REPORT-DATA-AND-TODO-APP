<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
   
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <meta
      name="description"
      content="Web site created using create-react-app"
    />
   
    <title>Covid-Report</title>
  </head>
  <body>
    <div class="container">
    <a href="index.php"> <button class="btn btn-secondary btn-sm mx-2 my-2">back</button></a>
      <h2 class="text-center">Latest Covid Report of India</h2>
      <table class="table">
          <thead>
            <tr>
              <th scope="col">State</th>
              <th scope="col">Active Now</th>
              <th scope="col">Total Confirmed</th>
              <th scope="col">Deaths</th>
              <th scope="col">Last-Updated</th>
            </tr>
          </thead>
          <tbody id="table-body">
          
           
          </tbody>
        </table>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="index.js"></script>
  </body>
</html>
<script>
   fetch('https://api.covid19india.org/data.json').then(
     res=>{
       res.json().then(
         data=>{
             var temp=" ";


            //  data.forEach(u => {
            for(let i=0; i<=37;i++){
               temp+="<tr>";
                temp+="<td>"+data['statewise'][i].state+"</td>";
                  temp+="<td>"+data['statewise'][i].active+"</td>";
                    temp+="<td>"+data['statewise'][i].confirmed+"</td>";
                      temp+="<td>"+data['statewise'][i].deaths+"</td>";
                     temp+="<td>"+data['statewise'][i].lastupdatedtime+"</td></tr>";
                    }
            //  });
             
             document.getElementById("table-body").innerHTML=temp;
           
          

         }
       )
     }
   )
    
        
</script>