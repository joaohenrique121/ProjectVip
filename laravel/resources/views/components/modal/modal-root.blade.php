
<dialog id="{{$id}}" class="modal-root">
    <x-modal.modal-header/>
        <form action="" method="dialog">
            <div class="min-h-56">
                <div class="flex flex-col justify-center items-center gap-3 w-full p-5">
                        {{$slot}}
                </div>
            </div>
        </form>
        {{$footer ?? ""}}
    </dialog>