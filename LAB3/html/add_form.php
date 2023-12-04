<form>
    <label for="id_p">ID : </label>
    <input type="text" name="id" id="id_p"> <br>
    <label for="name_p">NAME : </label>
    <input type="text" name="name" id="name_p"> <br>
    <label for="email_p">EMAIL : </label>
    <input type="text" name="email" id="email_p"><br>
    <button type="submit" class = "btn btn-primary">SAVE</button>
    <button type="reset" class = "btn btn-danger">CANCLE</button>
</form>

<script>
    $(function() {
        $("form").submit(function(e) {
            e.preventDefault();

            let fm = $(this);
            $.ajax({
                url: "/add_member.php",
                method: "POST",
                data: fm.serialize(),
                success: function(res) {
                    if (res == 'error')
                        alert("Can't insert data.")
                    else
                        $("#tb_member").load("/listItem.php")
                }
            });
        });
    }); o
</script>