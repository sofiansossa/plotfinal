@include('layouts.app')
  
<div class="container pt-5" style="max-width: 500px">
    @if(Session::has('success'))
    <div class="alert alert-success">
        {{Session::get('success')}}
    </div>
    @endif

        <form  action="" method="POST"  action="{{route('contact.save')}}" class="mt-100">
            @csrf 
            <div class="form-groupe">
                <label> Nom </label>
                <input type="text" class="form-control" name="nom">
                @if ($errors->has('nom')) 
                <div class="alert alert-danger">
                    {{$errors->first('nom')}}
                </div>
                @endif 
            </div>
            <div class="form-group">
                <label> Email </label>
                <input type="email" class="form-control" name="email" id="email">
                @if ($errors->has('email'))
                <div class="alert alert-danger">
                    {{$errors->first('email')}}  
                </div>
                @endif 
            </div>
            <div class="form-group">
                <label> Numéro de téléphone </label>
                <input type="text" class="form-control" name="téléphone" id="téléphone">
                @if ($errors->has('téléphone'))
                <div class="alert alert-danger">
                    {{$errors->first('téléphone')}}  
                </div>
                @endif 
            </div>
            <div class="form-group">
                <label> Sujet </label>
                <input type="text" class="form-control" name="sujet" id="sujet">
                @if ($errors->has('sujet'))
                <div class="alert alert-danger">
                    {{$errors->first('sujet')}}  
                </div>
                @endif 
            </div>
            <div class="form-group">
                <label> Message</label>
                <textarea class="form-control" name="message" id="message" rows="5"> </textarea>
                @if($errors->has('message'))
                <div class="alert alert-danger">
                    {{$errors->first('message')}}
                </div>
                @endif
            </div>

            <input type="submit" name="Envoyer" value="send" class="btn btn-primary btn-block">
        </form>
</div>

                

                @include('partials.footer')