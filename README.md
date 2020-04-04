一个可以在指定日期让你的网站变成黑白模式的纪念日插件，以此来缅怀那些逝去的生命。

<!--more-->
# GreyMemorialDay——typecho插件
一个可以在指定日期让你的网站变成黑白模式的纪念日插件，本插件兼职负责添加 theme-color 使得 Android Chrome 通知栏、标签栏变色。本插件为 MemorialDay 修复版，之前的插件启用后会让网站打不开，我就修复了一下，欢迎使用。
## 功能：指定日期自动黑白；添加theme-color使得Android Chrome通知栏、标签栏变色。

## 插件设置项
![Snipaste_2020-04-03_20-12-52.png][1]

### 默认纪念日？
默认在04-04和07-13网站将会变成黑白。

### theme-color是什么，我该怎么设置

此项值用来控制Android Chrome通知栏和标题栏变色，通过这样一个meta： <meta name="theme-color" content="#299981"> 在纪念日的时候，这项设置是不会生效的。此项数值将会变成黑白色使得和整体页面更搭配； 
非纪念日的时候，如果此项留空，那么将会保持原来的meta；如果不留空，那么将会显示你设置的meta。 

所以总结就是，如果你的主题带meta theme-color，那么把这项留空； 如果你的主题不带meta theme-color，你还想设置个theme-color，那就设置吧。

# 个人博客：https://www.baifan97.cn


  [1]: https://cdn.jsdelivr.net/gh/baifan97/blogimg/usr/uploads/2020/04/1236463137.png#vwid=1035&vhei=400
