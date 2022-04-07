    $('.aaa').click(function() {
      toastr.success('text text text text text text text text text text text text text text')
    }); 

    $('.sss').click(function() {
      toastr.info('text text text text text text text text text text text text text text')
    });

    $('.ddd').click(function() {
      toastr.error('text text text text text text text text text text text text text text')
    });

    $('.fff').click(function() {
      toastr.warning('text text text text text text text text text text text text text text')
    });

    function notify_fill(){
      toastr.warning('Form is not filled!')
    }

    function notify_success(){
      toastr.success('You have chances to be placed');
    }

    function notify_fail(){
      toastr.info('Sorry But You dont have chance to be placed')
    }

    function notify_error(){
      toastr.error('No Result Try again Please')
    }