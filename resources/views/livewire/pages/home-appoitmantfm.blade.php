<form class="appoinment-form" wire:submit.prevent="HomeAppoitmantfm">
    @if(session()->has('ok'))
        <style>
            .appoinment-form{
                border: none;
            }
        </style>
        <h1>Success</h1>
    @else

        <h5 style="font-weight: bold"><i class="fa fa-calendar-check-o"></i>Записатись на
            прийом
        </h5>
        <div class="form-group col-md-12 no-padding">
            <input type="text" class="form-control" id="patient_name"
                   wire:model="name" @if($errors->has('name'))  style="border-color: red !important;"
                   @else @endif placeholder="ім'я"/>
        </div>
        <div class="form-group col-md-12 no-padding">
            <input type="text" class="form-control"
                   id="patient_email" wire:model="phone"
                   @if($errors->has('phone'))  style="border-color: red !important;"
                   @else @endif placeholder="телефон"/>
            @error('phone') <span style="color: red">{{ $message }}
                @enderror</span>
        </div>
        <div class="form-group input-group col-md-12 no-padding">
            <div class="col-md-7 col-sm-8 col-xs-8 no-padding">
                <div class="col-md-6 col-sm-6 col-xs-6 no-left-padding">
                    <input type='date' value="{{date("Y-m-d")}}" min="{{date("Y-m-d")}}"
                           max="{{date('Y-m-d', strtotime(' +2 day'))}}"
                           wire:model="date" @if($errors->has('date'))  style="border-color: red !important;"
                           @else @endif  placeholder="день"/>
                    <span class="fa fa-angle-down"></span>
                </div>
                <select wire:model="time" @if($errors->has('time'))  style="border-color: red !important;"
                @else @endif>
                    <option value="">Оберіть час</option>
                    @foreach($new_times as $new_time)
                        <option>{{$new_time}}</option>
                    @endforeach

                </select>
            </div>
        </div>
        <div class="form-group col-md-12 col-sm-12 col-xs-12 no-padding">
                                    <textarea rows="4" class="form-control"
                                              id="patient_message" wire:model="message"
                                              placeholder="Повідомлення..."></textarea>
        </div>
        <button class="btn-submit pull-right" type="submit"><i
                class="fa fa-heart-o"></i>
            @if(session()->has('success')) Записано @else Записатись @endif   </button>
    @endif
</form>
