// Define a JavaScript function to be called when the document is loaded.
function myFunction() {
    // Select the <p> element by its ID.
    var rozyParagraph = document.getElementById("rozy");

    // Change the text content of the <p> element.
    rozyParagraph.textContent = "JavaScript function called!";
    document.write("ROZY!!")
}

// Add an event listener to run the function when the document is loaded.
document.addEventListener("DOMContentLoaded", myFunction);
