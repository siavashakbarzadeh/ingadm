@extends('../layout/' . $layout)

@section('subhead')
    <title>CRUD Form - Tinker - Tailwind HTML Admin Template</title>
@endsection

@section('subcontent')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Create Nft</h2>
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
                        <label for="crud-form-1" class="form-label">mint_address</label>
                        <input name="mint_address" id="crud-form-1" type="text" class="form-control w-full" placeholder="Input text">
                    </div>
                    <div>
                        <label for="crud-form-1" class="form-label">category</label>
                        @if($categories->count())
                            @foreach( $categories as $category)
                                <select class="form-control w-full" name="category" id="">
                                    <option value="{{$category->id}}">{{$category->title}}</option>

                                </select>
                            @endforeach
                        @else
                            <select class="form-control w-full" name="category" id="">
                                <option value="">-----</option>

                            </select>
                        @endif




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
