// DOM 
const searchBar = document.getElementById("search");
const list = document.getElementById('audio');

searchBar.onkeyup = ( ) =>{
    query = searchBar.value;
    

//AJAX
xhr = new XMLHttpRequest();
xhr.open( "POST", "./php/fetch.php", true);

// checking for good signs

xhr.onload = ( ) => {
    if(xhr.readyState === XMLHttpRequest.DONE ){
        if( xhr.status === 200 ){
            let data = xhr.response;
            list.innerHTML = data;
            console.log(data)
        }
    }
}

xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xhr.send("payload=" + query );

}


//SET HEADER

//SEND THE REQUEST