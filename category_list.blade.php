<!DOCTYPE html>
<html>
<head>
    <title>Category List</title>
</head>

<body>

<h2>Category List</h2>

<table border="1">
@foreach ($categories ?? [] as $s)
<tr>
    <td>{{ $s->id }}</td>
    <td>{{ $s->category_name }}</td>
    <td>{{ $s->category_desc }}</td>

    <td>
        <button onclick="editCategory({{ $s->id }})">
            Edit
        </button>
    </td>
</tr>
@endforeach
</table>


<form id="loadForm">
    @csrf

    <!-- hidden id -->
    <input type="text" id="category_id" name="category_id" placeholder="id">

    <input type="text" id="category_name" name="category_name" placeholder="Name">

    <textarea id="category_desc" name="category_desc" placeholder="Description"></textarea>

    <button class="btn btn-primary" onclick="editblog({{ $s->id }})">
        Edit
    </button>
</form>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
function editCategory(id)
{
    $.ajax({
        url: "/editcategory",
        type: "GET",
        data: { id: id },
        dataType: "json",
        success: function(data)
        {
            console.log(data);

            $('#cat_id').val(data.id);
            $('#cat_name').val(data.category_name);
            $('#cat_desc').val(data.category_desc);
        }
    });
}
</script>


 



</body>
</html>