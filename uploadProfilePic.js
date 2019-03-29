/*

This code has been taken from the following GitHub repository: https://github.com/carry0987/Imgur-Upload

The code is available to use according to the MIT license.

Minor changes have been made to the innerHTML lines of code.

*/



var feedback = function (res) {
    if (res.success === true) {
        var get_link = res.data.link.replace(/^http:\/\//i, 'https://');
        var userID = document.getElementById("userID").value;
        document.querySelector('.status').classList.add('bg-success');
        document.querySelector('.status').innerHTML =
                'Uploading...' + '<br><form id="profilePicUploadForm" method="post" action="newprofilepic.php"><input name="userID" type="hidden" value="' + userID + '"><input name="url" type="hidden" value="' + get_link + '">';
        //'Image : ' + '<br><input class="image-url" value=\"' + get_link + '\"/>' + '<img class="img" alt="Imgur-Upload" src=\"' + get_link + '\"/>';
        document.getElementById("profilePicUploadForm").submit();
    }
};

new Imgur({
    clientid: 'c3692ef15712e74', //You can change this ClientID
    callback: feedback
});