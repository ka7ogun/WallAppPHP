function uploadI (){
            
            var photo = document.getElementById("photo");
            

            var file = photo.files[0];

            console.log("File name: " + file.fileName);
            console.log("File size: " + file.fileSize);
            
            return false;