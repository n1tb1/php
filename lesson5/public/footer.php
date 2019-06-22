<div class="modal fade" id="myModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Название модали</h4>
      </div>
      <div class="modal-body">
        <div class="content">
          <!-- Содержимое модального окна -->
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

<script type="application/javascript">

  $('.popup').click( e => {
    let myModal, imgId, imgNode;
    myModal = $("#myModal");
    imgId = $(e.target).data('id');
    imgNode = `<img class="img-responsive" src="img/${$(e.target).data('big')}"/>`;

    $.ajax({
      url: "engine/image.php",
      method: "POST",
      data: { id : imgId },
      dataType: 'json'
    }).done( res => {
      myModal.find('h4').text(`Total views - ${res.views}`);
    }).fail(( jqXHR, textStatus ) => {
      alert( "Request failed: " + textStatus );
    });

    myModal.find(".content").html(imgNode);
    myModal.modal('show');
  });

</script>
</body>
</html>