@extends('../layout/' . $layout)

@section('subhead')
    <title>CRUD Form - Tinker - Tailwind HTML Admin Template</title>
@endsection

@section('subcontent')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Create Category</h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Form Layout -->
            <form id="categories-store" name="categories-store"  action="{{route('categories-store')}}" class="" method="post">

                @csrf
                <div class="intro-y box p-5">
                    <div>
                        <label for="crud-form-1" class="form-label">Category Title</label>
                        <input name="title" id="crud-form-1" type="text" class="form-control w-full" placeholder="Input text">
                    </div>

                    <div class="mt-3">
                        <label>Description</label>
                        <div class="mt-2">
                            <textarea name="description" class="editor">
                                <p>Content of the editor.</p>
                            </textarea>
                        </div>
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
