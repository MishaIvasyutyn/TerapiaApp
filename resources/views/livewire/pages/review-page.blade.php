<form wire:submit.prevent="leaveReview" style="width: 517px;">
    @if(!empty($messexist->message))
        <h1 style="text-align: center">Відгук залишано😊</h1>
    @else
        <h2 class="sr-only">Login Form</h2>
        <div class="illustration"><img id="reviewimage" src="{{ Session::get('status')}}"></div>
        <h3 style="text-align: center;margin-bottom: 20px">{{ Session::get('name')}}</h3>
        <div class="field">
            @if(session()->has('success'))
                <div class="form-group">
                    <button class="btn btn-success btn-block"> Відгук залишано</button>
                </div>
            @else
                <textarea placeholder="Відгук... " class="form-control" wire:model="message"
                          @if($errors->has('message'))  style="border-color: red !important;height: 140px !important;"
                          @else
                          style="border: 0; border-bottom: 1px solid #E0E0E0;height: 140px !important;" @endif></textarea>
        </div>
        <div class="form-group"><input class="form-control" type="tel" wire:model="phone"
                                       @if($errors->has('phone'))  style="border-color: red !important;"
                                       @else @endif placeholder="телефон"/></div>
        <div class="form-group">
            <button class="btn btn-primary btn-block" type="submit">Залишити відгук</button>
        </div>
    @endif
    @endif
</form>

