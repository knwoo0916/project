@extends('layout/master')

@section('maincontent')

@section('scriptsection')
<script src="/js/editor.js"></script>
@endsection
<form action="/post" method="post" style="width: 1200px; margin: 94px auto;">
    <div style="width: 200px; float: left; margin: 10px;">
        <h1>탑</h1>
        <div class="form-group">
            <div class="form-group">
                <label>닉네임</label>
                <input type="text" class="form-control" name="TopName" placeholder="LOL 닉네임을 써주세요">
            </div>
        </div>
        <div class="form-group">
            <label>티어</label>
            <select class="form-control" name="TopTier">
                <option selected>챌린저</option>
                <option>그랜드마스터</option>
                <option>마스터</option>
                <option>다이아 1</option>
                <option>다이아 2</option>
                <option>다이아 3</option>
                <option>다이아 4</option>
                <option>플래티넘 1</option>
                <option>플래티넘 2</option>
                <option>플래티넘 3</option>
                <option>플래티넘 4</option>
                <option>골드 1</option>
                <option>골드 2</option>
                <option>골드 3</option>
                <option>골드 4</option>
                <option>실버 1</option>
                <option>실버 2</option>
                <option>실버 3</option>
                <option>실버 4</option>
                <option>브론즈 1</option>
                <option>브론즈 2</option>
                <option>브론즈 3</option>
                <option>브론즈 4</option>
                <option>아이언 1</option>
                <option>아이언 2</option>
                <option>아이언 3</option>
                <option>아이언 4</option>
            </select>
        </div>
    </div>
    <div style="width: 200px; float: left; margin: 10px;">
        <h1>정글</h1>
        <div class="form-group">
            <div class="form-group">
                <label>닉네임</label>
                <input type="text" class="form-control" name="JugName" placeholder="LOL 닉네임을 써주세요">
            </div>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">티어</label>
            <select class="form-control" name="JugTier">
                <option selected>챌린저</option>
                <option>그랜드마스터</option>
                <option>마스터</option>
                <option>다이아 1</option>
                <option>다이아 2</option>
                <option>다이아 3</option>
                <option>다이아 4</option>
                <option>플래티넘 1</option>
                <option>플래티넘 2</option>
                <option>플래티넘 3</option>
                <option>플래티넘 4</option>
                <option>골드 1</option>
                <option>골드 2</option>
                <option>골드 3</option>
                <option>골드 4</option>
                <option>실버 1</option>
                <option>실버 2</option>
                <option>실버 3</option>
                <option>실버 4</option>
                <option>브론즈 1</option>
                <option>브론즈 2</option>
                <option>브론즈 3</option>
                <option>브론즈 4</option>
                <option>아이언 1</option>
                <option>아이언 2</option>
                <option>아이언 3</option>
                <option>아이언 4</option>
            </select>
        </div>
    </div>
    <div style="width: 200px; float: left; margin: 10px;">
        <h1>미드</h1>
        <div class="form-group">
            <div class="form-group">
                <label>닉네임</label>
                <input type="text" class="form-control" name="MidName" placeholder="LOL 닉네임을 써주세요">
            </div>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">티어</label>
            <select class="form-control" name="MidTier">
                <option selected>챌린저</option>
                <option>그랜드마스터</option>
                <option>마스터</option>
                <option>다이아 1</option>
                <option>다이아 2</option>
                <option>다이아 3</option>
                <option>다이아 4</option>
                <option>플래티넘 1</option>
                <option>플래티넘 2</option>
                <option>플래티넘 3</option>
                <option>플래티넘 4</option>
                <option>골드 1</option>
                <option>골드 2</option>
                <option>골드 3</option>
                <option>골드 4</option>
                <option>실버 1</option>
                <option>실버 2</option>
                <option>실버 3</option>
                <option>실버 4</option>
                <option>브론즈 1</option>
                <option>브론즈 2</option>
                <option>브론즈 3</option>
                <option>브론즈 4</option>
                <option>아이언 1</option>
                <option>아이언 2</option>
                <option>아이언 3</option>
                <option>아이언 4</option>
            </select>
        </div>
    </div>
    <div style="width: 200px; float: left; margin: 10px;">
        <h1>원딜</h1>
        <div class="form-group">
            <div class="form-group">
                <label>닉네임</label>
                <input type="text" class="form-control" ame="AdcName" placeholder="LOL 닉네임을 써주세요">
            </div>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">티어</label>
            <select class="form-control" name="AdcTier">
                <option selected>챌린저</option>
                <option>그랜드마스터</option>
                <option>마스터</option>
                <option>다이아 1</option>
                <option>다이아 2</option>
                <option>다이아 3</option>
                <option>다이아 4</option>
                <option>플래티넘 1</option>
                <option>플래티넘 2</option>
                <option>플래티넘 3</option>
                <option>플래티넘 4</option>
                <option>골드 1</option>
                <option>골드 2</option>
                <option>골드 3</option>
                <option>골드 4</option>
                <option>실버 1</option>
                <option>실버 2</option>
                <option>실버 3</option>
                <option>실버 4</option>
                <option>브론즈 1</option>
                <option>브론즈 2</option>
                <option>브론즈 3</option>
                <option>브론즈 4</option>
                <option>아이언 1</option>
                <option>아이언 2</option>
                <option>아이언 3</option>
                <option>아이언 4</option>
            </select>
        </div>
    </div>
    <div style="width: 200px; float: left; margin: 20px;">
        <h1>서폿</h1>
        <div class="form-group">
            <div class="form-group">
                <label>닉네임</label>
                <input type="text" class="form-control" name="SupName" placeholder="LOL 닉네임을 써주세요">
            </div>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">티어</label>
            <select class="form-control" name="SupTier">
                <option selected>챌린저</option>
                <option>그랜드마스터</option>
                <option>마스터</option>
                <option>다이아 1</option>
                <option>다이아 2</option>
                <option>다이아 3</option>
                <option>다이아 4</option>
                <option>플래티넘 1</option>
                <option>플래티넘 2</option>
                <option>플래티넘 3</option>
                <option>플래티넘 4</option>
                <option>골드 1</option>
                <option>골드 2</option>
                <option>골드 3</option>
                <option>골드 4</option>
                <option>실버 1</option>
                <option>실버 2</option>
                <option>실버 3</option>
                <option>실버 4</option>
                <option>브론즈 1</option>
                <option>브론즈 2</option>
                <option>브론즈 3</option>
                <option>브론즈 4</option>
                <option>아이언 1</option>
                <option>아이언 2</option>
                <option>아이언 3</option>
                <option>아이언 4</option>
            </select>
        </div>
    </div>
    <button type="submit" class="btn btn-primary" style="margin-left: 500px;;">등록하기</button>
</form>

@endsection