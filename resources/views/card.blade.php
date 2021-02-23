 <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <img src="/src/img/iphone_se_white2_4.png" alt="iPhone SE 64GB">
            <div class="caption">
                <h3>iPhone SE 64GB White</h3>
                <p>499,00 &euro;</p>
                <p>
                    <a href="{{ route('basket') }}" class="btn btn-primary" role="button">Į krepšelį</a>
                    @isset($category)
                        {{ $category->name }}
                    @endisset
                    
                    <a href="#" class="btn btn-default"
                    role="button">Daugiau</a>
                </p>
            </div>
    </div>
</div>