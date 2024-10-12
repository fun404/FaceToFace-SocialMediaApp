   // var date = new Date();
    //document.getElementById('curr-year').innerHTML = date.getFullYear();
        // document.getElementById("idd").style.color= "red";
        // pic.style.display = "none";

        //-----------------------------------------------



        //----------------------------------------------
        
    function checkpic() 


    {
        var upload= document.getElementsByClassName("upload");
        var pic = document.getElementsByName('pic')[0];
        var image = $('#imgInp').val();
        // console.log(image);

        // upload[0].onclick=document.getElementsByName('pic')[0].click();
        // upload[1].onclick=document.getElementsByName('pic')[0].click();
        // alert("hiii");
        // console.log(pic);
        if(image == '' || image == null)
        {
            alert('please select any image ');
            return false;
        }
        else
        {
            console.log('image selected');
            return true;
        }





        // if (pic.value != null ) 
        // {
        // alert("Nothing to upload! \nSelect Image.");
        // return false;
        // }
        // else 
        //     {
        //     // console.log("upload pic");
        //         return true;
        //     }
    }
    // upload[0].onclick=console.log( checkpic());
    // upload[1].onclick=console.log( checkpic());
