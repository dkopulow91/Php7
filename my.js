function item(id) {
    $.ajax({
        type: 'POST',
        url: '../controllers/Backet.php',
        data: 'id='+id,
        success: function (data) {
            alert("Вы добавили товар в корзину");
            $(".basket-items").html(data);
        }
    });
}