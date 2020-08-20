@extends('layouts.main')

@section('content')
<form class="products container">
    {{-- <div class=""> --}}
            <div class="products--search">
                <input class="input input__large" placeholder="Търси в сайта" name="q" value={{ $search }}>
                <button>
                    <span class="material-icons">search</span>
                </button>
            </div>

            <div class="products--page">
                {{-- <button class="products--filtersButton btn btn__secondary">
                    Филтри
                </button> --}}
                <div class="products--filters">
                    <div class="products--filters-sticky">
                        
                            <ul class="products--list">
                                <li class="products--list-item">
                                    <div class="products--list-item-title">
                                        Категория
                                    </div>
                                    <ul class="products--nestedList">
                                        @foreach ($categories as $category)
                                            <li class="products--nestedList-item @if($category->name === $currentCategory) products--nestedList-item__active @endif">
                                                <a href="{{ route($route, $category->name) }}">
                                                    {{ $category->name }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li class="products--list-item">
                                    <div class="products--list-item-title">
                                        Цена
                                    </div>
                                    
                                    <price-slider 
                                        :min="{{ $price["min"] }}" 
                                        :max="{{ $price["max"] }}" 
                                        :min-value="{{ $price["minValue"] }}" 
                                        :max-value="{{ $price["maxValue"] }}">
                                    </price-slider>
                                </li>
                            </ul>
                            <div class="products--form-buttons">
                                <button class="btn btn__primary">Филтър</button>
                                <a href="{{ route($route, $currentCategory) }}">
                                    <button type="button" class="btn btn__secondary">Изчисти</button>
                                </a>
                            </div>
                        
                    </div>
                </div>

                @if (count($products) > 0)
                    <div class="products--itemsWrapper">
                        <div class="products--items">
                            @foreach ($products as $product)
                                <div class="products--item">
                                    <x-product :product="$product"></x-product>
                                </div>
                            @endforeach 

                        </div>
                        <div class="products--pagination">
                            {{ $products->links() }}
                        </div>
                    </div>
                @else
                    <i class="products--noItems">
                        Няма резултати
                    </i>
                @endif
            </div>

        {{-- </div> --}}
    </form>
@endsection