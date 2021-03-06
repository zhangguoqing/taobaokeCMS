@foreach($categorys as $category)
<tr>
    <td></td>
    <td><input type="checkbox" name="ids[]" value="{{ $category->id }}" style="width:15px; height:15px;" ></td>
    <td class="text-center"><input type="number" name="order[{{ $category->id }}]" value="{{ $category->order }}" max="99" min="0" /></td>
    <td>{{ $category->name }}</td>
    <td class="text-center">{!! $category->font_icon !!}</td>
    <td class="text-center">
      main:@if($category->is_show == 1)          <span class="text-info"  ><i class="fa fa-toggle-on  text-navy"  ></i></span> |  @endif
           @if($category->is_show == 0)          <span class="text-danger"><i class="fa fa-toggle-off text-danger"></i></span> |  @endif
      PC:@if($category->is_show_pc == 1)         <span class="text-info"  ><i class="fa fa-toggle-on  text-navy"  ></i></span> |  @endif
         @if($category->is_show_pc == 0)         <span class="text-danger"><i class="fa fa-toggle-off text-danger"></i></span> |  @endif
      wx:@if($category->is_show_wx == 1)         <span class="text-info"  ><i class="fa fa-toggle-on  text-navy"  ></i></span> |  @endif
         @if($category->is_show_wx == 0)         <span class="text-danger"><i class="fa fa-toggle-off text-danger"></i></span> |  @endif
      wechat:@if($category->is_show_wechat == 1) <span class="text-info"  ><i class="fa fa-toggle-on  text-navy"  ></i></span> |  @endif
             @if($category->is_show_wechat == 0) <span class="text-danger"><i class="fa fa-toggle-off text-danger"></i></span> |  @endif
      qq:@if($category->is_show_qq == 1)         <span class="text-info"  ><i class="fa fa-toggle-on  text-navy"  ></i></span>    @endif
         @if($category->is_show_qq == 0)         <span class="text-danger"><i class="fa fa-toggle-off text-danger"></i></span>    @endif
    </td>
    <td class="text-center">
      @if(empty($category->image_small))
      <img class="img-thumbnail" src="/adminstyle/img/nopicture.jpg" style="max-width:31px; max-height:31px;" alt="">
      @else
      <img src="{{ $category->image_small}}" style="width:31px; height:31px; border:1px solid green;"  />
      @endif
    </td>
    <td>
      @if(empty($category->image_magic_left))
      <img src="/adminstyle/img/nopicture.jpg" style="max-width:60px; max-height:60px;" alt="">
      @else
      <img src="{{ $category->image_magic_left}}" height="60px" />
      @endif
    </td>
    <td>
      @if(empty($category->image_magic_top))
      <img src="/adminstyle/img/nopicture.jpg" style="max-width:60px; max-height:60px;" alt="">
      @else
      <img src="{{ $category->image_magic_top}}" height="60px" />
      @endif
    </td>
    <td>
      @if(empty($category->image_magic_buttom))
      <img src="/adminstyle/img/nopicture.jpg" style="max-width:60px; max-height:60px;" alt="">
      @else
      <img src="{{ $category->image_magic_buttom}}" height="60px" />
      @endif
    </td>
    <td>
      @if($category->is_show_pc == 1) <span class="text-navy" style="display:inline-block; width:40px;">显示</span>@endif
      @if($category->is_show_pc == 0) <span class="text-danger" style="display:inline-block; width:40px;">不显示</span>@endif
      <a href="{{ $category->link_pc }}" target="_blank" style="display:inline-block; margin-left:20px; margin-right:20px;">查看</a>
      <span>{{ $category->link_pc }}</span>
    </td>
    <td>
      @if($category->is_show_wx == 1) <span class="text-navy" style="display:inline-block; width:40px;">显示</span>@endif
      @if($category->is_show_wx == 0) <span class="text-danger" style="display:inline-block; width:40px;">不显示</span>@endif
      <a href="{{ $category->link_wx }}" target="_blank" style="display:inline-block; margin-left:20px; margin-right:20px;">查看</a>
      <span>{{ $category->link_wx }}</span>
    </td>
    <td>
      @if($category->is_show_wechat == 1) <span class="text-navy" style="display:inline-block; width:40px;">显示</span>@endif
      @if($category->is_show_wechat == 0) <span class="text-danger" style="display:inline-block; width:40px;">不显示</span>@endif
      <a href="{{ $category->link_wechat }}" target="_blank" style="display:inline-block; margin-left:20px; margin-right:20px;">查看</a>
      <span>{{ $category->link_wechat }}</span>
    </td>
    <td>
      @if($category->is_show_qq == 1) <span class="text-navy" style="display:inline-block; width:40px;">显示</span>@endif
      @if($category->is_show_qq == 0) <span class="text-danger" style="display:inline-block; width:40px;">不显示</span>@endif
      <a href="{{ $category->link_qq }}" target="_blank" style="display:inline-block; margin-left:20px; margin-right:20px;">查看</a>
      <span>{{ $category->link_qq }}</span>
    </td>
    <td class="text-center">
      <a class="text-info" href="{{ route('categorys.edit', $category->id) }}"><i class="fa fa-edit text-info"></i> 编辑</a> |
      <a class="text-danger" href="{{ route('categorys.deleteById', $category->id) }}"><i class="fa fa-close text-danger"></i> 删除</a> |
      <a class="text-info" href="{{ route('categorys.show', $category->id) }}"><i class="fa fa-info-circle text-info"></i> 详情</a>
    </td>
</tr>
@endforeach
