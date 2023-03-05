@extends('../layout/' . $layout)

@section('subhead')
    <title>CRUD Form - Tinker - Tailwind HTML Admin Template</title>
@endsection

@section('subcontent')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Create Order</h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Form Layout -->
            <form id="categories-store" name="categories-store"  action="{{route('nfts-store')}}" class="" method="post">

                @csrf
                <div class="intro-y box p-5">

                    <div>
                        <label for="crud-form-1" class="form-label">Name</label>
                        <input name="name" id="crud-form-1" type="text" class="form-control w-full" placeholder="Input text">
                    </div>
                    <div>
                        <label for="crud-form-1" class="form-label">eth_address</label>
                        <input name="eth_address" id="crud-form-1" type="text" class="form-control w-full" placeholder="Input text">
                    </div>
                    <div>
                        <label for="crud-form-1" class="form-label">gender</label>
                        <input name="gender" id="crud-form-1" type="text" class="form-control w-full" placeholder="Input text">
                    </div>
                    <div>
                        <label for="crud-form-1" class="form-label">email</label>
                        <input name="email" id="crud-form-1" type="email" class="form-control w-full" placeholder="Input text">
                    </div>
                    <div>
                        <label for="crud-form-1" class="form-label">password</label>
                        <input name="password" id="crud-form-1" type="password" class="form-control w-full" placeholder="Input text">
                    </div>

                    <div class="text-right mt-5">
                        <button type="reset" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                        <button type="submit" class="btn btn-primary w-24">Save</button>
                    </div>
                </div>
            </form>

            <!-- END: Form Layout -->
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ mix('dist/js/ckeditor-classic.js') }}"></script>
@endsection
