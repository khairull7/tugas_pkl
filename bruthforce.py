def brute_force_two_sum(numbers, target):
    n = len(numbers)
    for i in range(n):
        for j in range(i + 1, n):
            if numbers[i] + numbers[j] == target:
                return [numbers[i], numbers[j]]
    return None 

numbers = [3, 34, 4, 12, 5, 2]
target = 16
result = brute_force_two_sum(numbers, target)
print("two found:", result)
 