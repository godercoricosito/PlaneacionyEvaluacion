<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="sources/css/bootstrap.css">
    <script type="text/javascript" src="sources/js/bootstrap.js"></script>
    <script type="text/javascript" src="sources/js/menu.js"></script>
</head>
<body>


<!-- Button trigger modal -->
    <button type="button" id="1" onClick="reply_click(this.id)" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
    </button>
    <button type="button" id="2" onClick="reply_click(this.id)" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
    </button>

<!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            ...
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
        </div>
    </div>
    </div>

<script>
    const myModal = document.getElementById('myModal')
    const myInput = document.getElementById('myInput')
    
    myModal.addEventListener('shown.bs.modal', () => {
    myInput.focus()

    var reply_click = function()
{
    alert("Button clicked, id "+this.id+", text"+this.innerHTML);
}
document.getElementById('1').onclick = reply_click;
document.getElementById('2').onclick = reply_click;
document.getElementById('3').onclick = reply_click;
    })
</script>
</body>
</html>