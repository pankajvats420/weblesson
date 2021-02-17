The sort() function sorts an indexed array in ascending order
uasort Sort the elements of the $arr array by values using a user-defined comparison function:

uksort Sort the elements of the $arr array by keys using a user-defined comparison function:

 usort Sort the elements of the $a array using a user-defined comparison function:

 The shuffle() function randomizes the order of the elements in the array.
 rsort Sort the elements of the $cars array in descending alphabetical order:

 The list() function is used to assign values to a list of variables in one operation.

 ksort Sort an associative array in ascending order, according to the key:
 krsort Sort an associative array in descending order, according to the key:
 key  Return the element key from the current internal pointer position:

 The in_array() function searches an array for a specific value.

 The extract() function imports variables into the local symbol table from an array.

 The end() function moves the internal pointer to, and outputs, the last element in the array.

Related methods:

current() - returns the value of the current element in an array
next() - moves the internal pointer to, and outputs, the next element in the array
prev() - moves the internal pointer to, and outputs, the previous element in the array
reset() - moves the internal pointer to the first element of the array
each() - returns the current element key and value, and moves the internal pointer forward

The compact() function creates an array from variables and their values.
The asort() function sorts an associative array in ascending order, according to the value.

The arsort() function sorts an associative array in descending order, according to the value.

The array_walk() function runs each array element in a user-defined function. The array's keys and values are parameters in the function.

The array_walk_recursive() function runs each array element in a user-defined function. The array's keys and values are parameters in the function. The difference between this function and the array_walk() function is that with this function you can work with deeper arrays (an array inside an array).
The array_values() function returns an array containing all the values of an array.

The array_unshift() function inserts new elements to an array. The new array values will be inserted in the beginning of the array.

The array_unique() function removes duplicate values from an array. If two or more array values are the same, the first appearance will be kept and the other will be removed.

The array_uintersect_uassoc() function compares the keys and values of two or more arrays, and returns the matches.

The array_uintersect_assoc() function compares the keys and values of two or more arrays, and returns the matches.

The array_uintersect() function compares the values of two or more arrays, and returns the matches.

The array_udiff_uassoc() function compares the keys and values of two or more arrays, and returns the differences.

The array_udiff_assoc() function compares the keys and values of two or more arrays, and returns the differences.

The array_udiff() function compares the values of two or more arrays, and returns the differences.

The array_sum() function returns the sum of all the values in the array.

The array_splice() function removes selected elements from an array and replaces it with new elements. The function also returns an array with the removed elements