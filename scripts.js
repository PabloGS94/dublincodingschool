window.addEventListener('load', () => {
    var pathArray = window.location.pathname.split('/');
    var pageName = pathArray[pathArray.length -1].split('.')[0];

    if(pageName === 'contact'){
        var contactForm = document.getElementById('contact-form');
        var responseDiv = document.getElementById('response');
    
        contactForm.addEventListener('submit', e => {
            e.preventDefault();
            submitForm();
        })
    }
    
    if(pageName === 'gallery'){
        fetch('http://localhost/gsphoto/images.json', {
            method: 'get'
        }).then(response => response.json())
        .then(jsonData => {
            jsonData.images.forEach(i => {
                var imagesGallery = document.getElementById('images-gallery');
                var img = document.createElement('img');
                img.src = i.image_url;
                imagesGallery.appendChild(img);
            })
        })
    }

    function submitForm(){  
        var firstName = document.getElementById('name').value;
        var lastName = document.getElementById('last-name').value;
        var email = document.getElementById('email').value;
        var message = document.getElementById('message').value;
    
        fetch('http://localhost/gsphoto/api/postcontact.php',{
            method: 'post',
            headers: {
                "Content-Type": "text/plain"
            },
            body:JSON.stringify({
                "first_name": firstName,
                "last_name": lastName,
                "email": email,
                "message": message
            })
        }).then(response => response.json())
        .then(jsonData => {
            clearValues();
            console.log(jsonData.message);
            if (jsonData.response_code === 201){
                responseDiv.classList.add('alert-success');                
            }else{
                responseDiv.classList.add('alert-danger');
            }
            responseDiv.innerHTML = jsonData.message;
        })
        .catch(error => {
            responseDiv.classList.add('alert-danger');
            responseDiv.innerHTML = 'Error: ' + error;
        });
    }
    
    function clearValues(){
        document.getElementById('name').value = '';
        document.getElementById('last-name').value = '';
        document.getElementById('email').value = '';
        document.getElementById('message').value = '';
    }
})