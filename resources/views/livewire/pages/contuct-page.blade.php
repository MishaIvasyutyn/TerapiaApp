<form class="row" wire:submit.prevent="saveContact">
    @csrf
    <div class="col-md-6 col-sm-6 col-xs-12 form-group">
        <input type="text" class="form-control" placeholder="Ім'я" wire:model="name"
               id="input_name"     @if($errors->has('name'))  style="border-color: red !important;border-width: 2px 2px 2px 2px;" @elseif(session()->has('success'))  style=" border-color: #32de54 !important;border-width: 2px 2px 2px 2px;" @endif"/>
    </div>
    <div class="col-md-6 col-sm-6 col-xs-12 form-group">
        <input type="tel" class="form-control" placeholder="Телефон:" wire:model="phone" onkeypress='validate(event)'
               id="input_phone"    @if($errors->has('phone'))  style="border-color: red !important;border-width: 2px 2px 2px 2px;" @elseif(session()->has('success'))  style="border-color: #32de54 !important;border-width: 2px 2px 2px 2px;" @endif />
    </div>
    <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                <textarea class="form-control" placeholder="Повідомлення" rows="6"
                                          wire:model="message"
                                          id="textarea_message"          @if($errors->has('message'))  style="border-color: red !important;border-width: 2px 2px 2px 2px;"  @elseif(session()->has('success'))  style="border-color: #32de54 !important;border-width: 2px 2px 2px 2px;" @endif ></textarea>
    </div>
    <div class="form-group col-md-12 col-sm-12 col-xs-12">
        <input type="submit" id="button-contact"  @if(session()->has('success')) value="Відправлено" @endif>
    </div>
    <div id="alert-msg" class="alert-msg"></div>
</form>
<script>
    function validate(evt) {
        var theEvent = evt || window.event;

        // Handle paste
        if (theEvent.type === 'paste') {
            key = event.clipboardData.getData('text/plain');
        } else {
            // Handle key press
            var key = theEvent.keyCode || theEvent.which;
            key = String.fromCharCode(key);
        }
        var regex = /[0-9]|\./;
        if( !regex.test(key) ) {
            theEvent.returnValue = false;
            if(theEvent.preventDefault) theEvent.preventDefault();
        }
    }
    document.getElementById('input_phone').addEventListener('blur', function (e) {
        var x = e.target.value.replace(/\D/g, '').match(/(\d{3})(\d{3})(\d{4})/);
        e.target.value = '(' + x[1] + ') ' + x[2] + '-' + x[3];
    });
</script>
