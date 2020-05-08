function eraseText() { /*method to clear text area when clear button clicked*/
    var choice = window.confirm("Are you sure you want to clear your post?")
    if(choice===true) 
    {        
        var y = document.getElementById("blogTitle");
        y.value = ''; 
        var x = document.getElementById("blogContent"); 
        x.value = ''; 
               
    }    
}
function submitForm() { /*method to prevent submission of form if fields title and post are left blank*/
    var x = document.getElementById("blogContent");
    var y = document.getElementById("blogTitle");
    document.getElementById("postForm").onsubmit = function(e) { //preventDefault() function
    if(x.value==='' && y.value==='')  
    {
        window.alert("Warning! Blog content and title must not be empty!");
        document.getElementById("blogContent").style.boxShadow = "0 0 10px red";
        document.getElementById("blogTitle").style.boxShadow = "0 0 10px red";        
        return e.preventDefault();  //stop form submission
    }
    else if(x.value==='')
    {
        window.alert("Warning! Blog content and title must not be empty!");
        document.getElementById("blogContent").style.boxShadow = "0 0 10px red";        
        return e.preventDefault();     //stop form submission
    }
    else if(y.value==='')
    {
        window.alert("Warning! Blog content and title must not be empty!");
        document.getElementById("blogTitle").style.boxShadow = "0 0 10px red";                
        return e.preventDefault();  //stop form submission
    }  
    }
}

/*functions to clear highlight from text fields when user focuses on them*/
function clearHighlightTitle() {
    document.getElementById("blogTitle").style.boxShadow = "none";
}

function clearHighlightContent() {
    document.getElementById("blogContent").style.boxShadow = "none";
}