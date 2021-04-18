<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <link rel="icon" href="%PUBLIC_URL%/favicon.ico" />
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <meta
      name="description"
      content="Web site created using create-react-app"
    />
    <link rel="apple-touch-icon" href="%PUBLIC_URL%/logo192.png" />
    <link rel="manifest" href="%PUBLIC_URL%/manifest.json" />
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
       

    </style>
    <title>TODO-List</title>
  </head>
  <body>
  <a href="index.php"> <button class="btn btn-secondary btn-sm mx-2 my-2">back</button></a>
   <div class="container">
       <h2 class="text-center">TODO-List</h2>
       
        <div class="form-group">
          <label for="exampleInputEmail1"></label>
          <input type="text" class="form-control" id="title" aria-describedby="emailHelp" placeholder="Title">
         
        </div>
        
        <div class="form-group">
         <label for="exampleFormControlTextarea1">Description</label>
         <textarea class="form-control" id="description" rows="3"></textarea>
        </div>
        <button  class="btn btn-success my-2" id="add">Add to List</button>
        <button  class="btn btn-danger my-2" onclick="cl()">Clear</button>
   </div> <hr/>
    <div class="container my-10">
        <h2 class="text-center">Todos</h2>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">S No</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody id="table-body">
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td><button class="btn btn-danger btn-sm">Delete</button></td>
              </tr>
             
            </tbody>
          </table>
    </div>
  


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script>
    function Andupdate(){
        console.log("Clicked!!");
         tit = document.getElementById('title').value;
         desc = document.getElementById('description').value;
         if(localStorage.getItem('itemsJson')==null){
             itemsJsonArray=[];
             itemsJsonArray.push([tit,desc]);
             localStorage.setItem('itemsJson',JSON.stringify(itemsJsonArray))
         }
         else{
             itemarray = localStorage.getItem('itemsJson');
             itemsJsonArray = JSON.parse(itemarray);
             itemsJsonArray.push([tit,desc]);
             localStorage.setItem('itemsJson',JSON.stringify(itemsJsonArray))

         }
         update();
        

    }
    function cl(){
        if(confirm("Do You Really Want To Clear??")){
        console.log("Clearing the list!!");
        localStorage.clear();
        update();
        }
        
    }
    function update(){
        if(localStorage.getItem('itemsJson')==null){
             itemsJsonArray=[];
             localStorage.setItem('itemsJson',JSON.stringify(itemsJsonArray))
         }
         else{
             itemarray = localStorage.getItem('itemsJson');
             itemsJsonArray = JSON.parse(itemarray);
             

         }
       
        let tb =document.getElementById("table-body");
        let str = "";
         itemsJsonArray.forEach((element,index) => {
             str += 
             `
             <tr>
                <th scope="row">${index+1}</th>
                <td>${element[0]}</td>
                <td>${element[1]}</td>
                <td><button class="btn btn-danger btn-sm" onclick="Dlt(${index})">Delete</button></td>
              </tr> 
             `
         });
         tb.innerHTML=str;
        
         
          

    }
     add = document.getElementById("add");
     add.addEventListener("click",Andupdate);
     update();
     

     function Dlt(item){
        itemarray = localStorage.getItem('itemsJson');
        itemsJsonArray = JSON.parse(itemarray); 
        itemsJsonArray.splice(item,1);
        localStorage.setItem('itemsJson',JSON.stringify(itemsJsonArray))
        update();

     }
      

    </script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
  <script src="js/bootstrap.js"></script>

  </body>
</html>
