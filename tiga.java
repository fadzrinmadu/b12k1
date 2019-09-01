import java.util.Scanner;

public class tiga {
	public static void main(String[] args) {
		int n, stop = 1;
		
		Scanner sc = new Scanner(System.in);

		System.out.print("Masukkan panjang alas dan tinggi segitiga: ");
		n = sc.nextInt();

		if (0 < n) {
			while (true) {
				for (int j = 2; j <= ; j++) {
					if (n % j == 1) {
						System.out.print(j +" ");
					}
				}
				System.out.println();
			}
		}
	}
}