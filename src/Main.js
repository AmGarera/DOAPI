/**
 * Created by anthony on 7/29/16.
 */


// handles the click event, sends the query
function getOutput() {
    $.ajax({
        url:'Main.php',
        complete: function (response) {
            $('#output').html(response.responseText);
        },
        error: function () {
            $('#output').html('Bummer: there was an error!');
        }
    });
    return false;
}
console.log(getOutput());