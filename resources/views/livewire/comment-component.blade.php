<div class="row" style="height: 100%">
    <div class="col-lg-12 animate__animated animate__fadeInDown animate__slower" style="margin-top: auto">
        <div style="width: 100%">
            <div class="text-center mb-4 ">
                <div class="font-latin color-accent h4 editable">
                    Kirim Ucapan
                </div>
            </div>
            <div class="rsvp-placeholder ">
                <div class="rounded d-flex flex-column justify-content-center align-items-center">
                    <form class="w-100" wire:submit.prevent="saveData">
                        <div class="form-group">
                            <input id="inputGroup" type="text" placeholder="Nama Tamu"
                                class="form-control form-control-sm" wire:model="nama">
                        </div>
                        <div class="form-group">
                            <select id="inputAttendance" placeholder="Kehadiran?" class="form-control form-control-sm"
                                wire:model="kehadiran">
                                <option value="" selected="selected" hidden>Kehadiran?</option>
                                <option value="Hadir">Hadir</option>
                                <option value="Tidak Hadir">Tidak Hadir</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <textarea id="inputComment" rows="3" placeholder="Komentar atau Ucapan" class="form-control form-control-sm"
                                wire:model="ucapan"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block mt-1 mb-2"
                            style="border-radius: 10px!important">
                            <span>Kirim</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-3 col-lg-12 animate__animated animate__fadeInUp animate__slower">
        <div class="w-100 h-100">
            <div id="splideComment" class="splide" style="max-width: 500px !important; height: 100%;">
                <div class="splide__track" style="height: 100%;">
                    <div class="splide__list">
                        @foreach ($comment as $c)
                            <div class="splide__slide">
                                <div class="mb-2">
                                    <div class="d-flex flex-row">
                                        <img src="{{ asset('images/' . $c->image . '.png') }}" width="40"
                                            height="40" class="rounded-circle mr-3">
                                        <div class="w-100 bg-comment">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="d-flex flex-row align-items-center">
                                                    <span class="mr-2 color-accent">{{ $c->nama }}</span>
                                                    @if ($c->kehadiran == 'Hadir')
                                                        <span class="badge badge-prm">{{ $c->kehadiran }}</span>
                                                    @else
                                                        <span class="badge badge-danger">{{ $c->kehadiran }}</span>
                                                    @endif
                                                </div>
                                                <div class="small">
                                                    {{ $c->created_at->diffForHumans() }}
                                                </div>
                                            </div>
                                            <p class="text-justify comment-text mb-0">
                                                {{ $c->ucapan }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                @if (count($comment) > 1)
                    <div class="custom-pagination mt-2 text-center">
                        <button class="btn btn-primary splide__prev mr-1" style="border-radius: 10px; font-size: small">
                            Prev
                        </button>
                        <button class="btn btn-primary splide__next ml-1" style="border-radius: 10px; font-size: small">
                            Next
                        </button>
                    </div>
                @endif
            </div>

        </div>
    </div>
</div>

@livewireScripts

<script>
    document.addEventListener('livewire:load', function() {
        document.addEventListener('livewire:update', function() {
            var splideTest = new Splide('#splideComment', {
                type: 'fade', // or 'slide'            
                pagination: false,
                arrows: false,
                loop: true,
                rewind: true,
            }).mount();

            document.querySelector('.splide__prev').addEventListener('click', function() {
                splideTest.go('-');
            });

            document.querySelector('.splide__next').addEventListener('click', function() {
                splideTest.go('+');
            });
        })
    });
</script>
