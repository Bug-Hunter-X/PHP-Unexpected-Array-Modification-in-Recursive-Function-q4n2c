# PHP Unexpected Array Modification in Recursive Function

This repository demonstrates a subtle bug in PHP involving unexpected array modification within a recursive function.  The `processData` function aims to process nested arrays, converting string values to lowercase. However, due to the way PHP handles array passing, the original array is modified, leading to unexpected results. The solution provides a corrected version that avoids this issue.

## Bug Description
The bug stems from the recursive nature of `processData`. PHP passes arrays by reference, meaning modifications within the recursive call affect the original array. This can lead to unexpected behavior, especially in complex nested structures.

## Solution
The provided solution addresses the issue by creating a copy of the array within each recursive call before processing it. This ensures that modifications do not impact the original array.