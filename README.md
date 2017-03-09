# test_shape_areas
A test I did recently.

- Requirements : php version >= 5.6 (developed and tested on 7.1).
- Installation: download to a folder of your choise. Do a composer update. To run the tests type `phpunit tests` in the console.

## Task 3 is :

For the array of letters (a, b, c, d, e, f), write a recursive function that outputs the following structure:

`<a>`<br/>
&nbsp;`<b>`<br/>
&nbsp;&nbsp;`<c>`<br/>
&nbsp;&nbsp;&nbsp;`<d>`<br/>
&nbsp;&nbsp;&nbsp;&nbsp;`<e>`<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;`<f>`<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;`</f>`<br/>
&nbsp;&nbsp;&nbsp;&nbsp;`</e>`<br/>
&nbsp;&nbsp;&nbsp;`</d>`<br/>
&nbsp;&nbsp;`</c>`<br/>
&nbsp;`</b>`<br/>
`</a>`

## Task 4 is :

Write a program that reads a CSV file with information about different regular polygons (all sides
equal), and circles. Each row of the file contains the name of the polygon and its side length, in order.
Acceptable polygons include:
- triangle
- square
- pentagon

Note also that the shape "circle" should be accepted. Of course, a circle has no side length; instead, the
dimension refers to its radius.<br />
Here is an example CSV file:<br />
triangle,3.5<br />
circle,2<br />

Given the input above, your program should output:<br />
A triangle with side length 3.5 u has a perimeter of 10.5 u and an area of 5.30 u^2<br />
A circle with radius 2 u has a perimeter of 12.57 u and an area of 12.57 u^2<br />

Provide a judicious amount of unit tests for all the above requirements. You do not need to use a thirdparty
unit testing tool. Just write some tests that give your code a good run for its money.
