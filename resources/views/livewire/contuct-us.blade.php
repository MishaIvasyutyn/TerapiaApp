<div class="col-md-4 col-sm-6 col-xs-6 contact-form">
    <h3 class="widget-title">Виникли запитання ?</h3>
    <form wire:submit.prevent="saveContact">
   @csrf
        <div class="form-group">
            <input type="text" class="form-control" placeholder="ім'я" wire:model="name"
                   @if($errors->has('name'))  style="border-color: red !important;" @elseif(session()->has('success'))  style="border-color: #32de54 !important;" @endif"/>
        </div>
        <div class="form-group">
            <input type="tel" class="form-control" placeholder="телефон" wire:model="phone" id="phone"
                   @if($errors->has('phone'))  style="border-color: red !important;" @elseif(session()->has('success'))  style="border-color: #32de54 !important;" @endif />
        </div>
        <div class="form-group">
                            <textarea class="form-control" placeholder="повідомлення" rows="4" wire:model="message"
                                      @if($errors->has('message'))  style="border-color: red !important;"  @elseif(session()->has('success'))  style="border-color: #32de54 !important;" @endif ></textarea>

        </div>
        <div class="form-group">
            <input type="submit" value="Відправити" id="button-contact"  @if(session()->has('success')) value="Відправлено" @endif>
        </div>
        <div id="alert-msg-que" class="alert-msg"></div>
    </form>
</div>
<script>
    document.getElementById('phone').addEventListener('blur', function (e) {
        var x = e.target.value.replace(/\D/g, '').match(/(\d{3})(\d{3})(\d{4})/);
        e.target.value = '(' + x[1] + ') ' + x[2] + '-' + x[3];
    });
</script>

