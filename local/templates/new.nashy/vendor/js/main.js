$(document).ready(function () {
    const remoteSite = 'https://nashy.by';
    var curSectId = 1;
    var url = remoteSite + `/api/v1/leftmenu/getsections/?SECTION_ID=${curSectId}`;
    $.ajax({
        url: url,
        method: 'GET',
        headers: {
            "Authorization-Login":"admin",
            "Authorization-Password":"03Shinglas+nashi"

        },
        success: function (response) {
            const resp = response.result.SECTION_ID;
            //console.log(resp);
            /*Object.values(resp).map((elem)=> {
                console.log(elem);
            });*/
        },
        error: function (error) {
            console.log(error);
        }
    })
});