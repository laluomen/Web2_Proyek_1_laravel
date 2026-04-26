 @if (session('error') || $errors->any() || session('success'))
            <div class="alert-group">
                @if (session('error'))
                    <div class="alert alert-danger mb-2">
                        {{ session('error') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger mb-2">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if (session('success'))
                    <div class="alert alert-success mb-2">
                        {{ session('success') }}
                    </div>
                @endif
            </div>
@endif