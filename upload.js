/*

This code has been taken from the following GitHub repository: https://github.com/carry0987/Imgur-Upload

The code is available to use according to the MIT license.

Minor changes have been made to the innerHTML lines of code.

*/



var feedback = function(res) {
    if (res.success === true) {
        var get_link = res.data.link.replace(/^http:\/\//i, 'https://');
        var userID = document.getElementById("userID").value;
        var imageName = document.getElementById("newImageName").value;
        document.querySelector('.status').classList.add('bg-success');
        document.querySelector('.status').innerHTML =
                'Uploading...<br><input name="id" type="int" value="'+userID+'"><input name="name" type="hidden" value="'+imageName+'"><input name="url" type="hidden" value="'+get_link+'">';
        //'Image : ' + '<br><input class="image-url" value=\"' + get_link + '\"/>' + '<img class="img" alt="Imgur-Upload" src=\"' + get_link + '\"/>';
        document.getElementById("imageUploadForm").submit();
    }
};

new Imgur({
    clientid: 'c3692ef15712e74', //You can change this ClientID
    callback: feedback
});