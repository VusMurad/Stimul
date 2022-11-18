$(document).ready(function () {

  $(".deleteinfo").click(function (e) {
    e.preventDefault();
    Swal.fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!'
    })
      .then((result) => {
        if (result.isConfirmed) {
          Swal.fire(
            'Deleted!',
            'Your file has been deleted.',
            'success'
          )
        }
      }) 
  })
  $(".updateinfo").click(function (e){
    e.preventDefault();

  })

  $(".err").click(function (e) {
    e.preventDefault();
    Swal.fire(
      'İstifadəçi adı və ya şifrə yanlışdır!',
      'question'
    )
  })
})