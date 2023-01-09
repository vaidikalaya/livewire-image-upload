<div>
    <div class="container d-flex mt-5">
        <div class="card">
            <div class="card-body">
                @error('image')
                    <div class="alert alert-danger show">{{ $message }}</div>
                @enderror
                <input type="file" wire:model="image" class="form-control" required> 
                <button class="btn btn-primary mt-2" wire:click="uploadImage()">Upload</button>
            </div>
            @if(session('success_msg'))
                <div class="card-footer">
                    <div class="alert alert-success show">{{ session('success_msg') }}</div>
                    @if(session('uploaded_img'))<img src="{{session('uploaded_img')}}" height="50px" width="50px">@endif
                </div>
            @endif
        </div>
    </div>
</div>
