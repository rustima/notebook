<?php
/*foreach 语法结构提供了遍历数组的简单方式。foreach 仅能够应用于数组和对象，如果尝试应用于其他数据类型的变量，或者未初始化的变量将发出错误信息。有两种语法： 
 *
 * foreach (array_expression as $value)
 *     statement
 * foreach (array_expression as $key => $value)
 *     statement
 * 第一种格式遍历给定的 array_expression 数组。每次循环中，当前单元的值被赋给 $value 并且数组内部的指针向前移一步（因此下一次循环中将会得到下一个单元）。 
 * 第二种格式做同样的事，只除了当前单元的键名也会在每次循环中被赋给变量 $key。
 * 还能够自定义遍历对象。 
 * 当 foreach 开始执行时，数组内部的指针会自动指向第一个单元。这意味着不需要在 foreach 循环之前调用 reset()。 
 * 
 * 由于 foreach 依赖内部数组指针，在循环中修改其值将可能导致意外的行为。 
 * 
 */