function areNumbersConsecutive(arr) {
    // 配列を昇順にソート
    arr.sort((a, b) => a - b);

    // 各要素が前の要素より1だけ大きいかを確認
    for (let i = 1; i < arr.length; i++) {
        if (arr[i] !== arr[i - 1] + 1) {
            return false;
        }
    }
    return true;
}
