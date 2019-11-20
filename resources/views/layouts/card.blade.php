<div class="card">
    <div class="card__wezom">
        <div class="card__house">
            <img class="card__img" src="{{$card->img->src}}" alt="{{$card->img->alt}}">
            <div class="card__label">
                <div class="card-front">{{$card->label}}</div>
            </div>
            <div class="buttons">
                <div class="buttons__icon">
                    <svg class="buttons__heart" viewBox="0 0 20 20" width="30px" height="30px">
                        <use xlink:href="img/heart.svg#heart"></use>
                    </svg>
                </div>
            </div>
            <a href="#" class="card__text" target="blank">{!!$card->title!!}</a>
        </div>
    </div>
    <div class="card__adres">
        <div class="card-place">{{$card->place}}</div>
        <div class="card-metro">
            <svg class="card__svg" viewBox="0 0 20 20" width="25" height="25">
                <use xlink:href="img/metro.svg#metro"></use>
            </svg>
        </div>
        <div class="card-price">{!!$card->price!!}</div>
        <div class="card__decision">{!!$card->decision!!}</div>
    </div>
</div>
