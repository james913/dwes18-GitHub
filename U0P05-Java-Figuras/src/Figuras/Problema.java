package Figuras;

public class Problema {

	public static void main(String[] args) {
		
		Circunferencia c1= new Circunferencia(4.8);
		Circunferencia c2= new Circunferencia(1.5);
		Cuadrado cuadrado= new Cuadrado(4.2);
		Triangulo tr= new Triangulo(8, 15);
		
		double areaTotal=0;
		
		System.out.println("El area de la circunferencia 1 es: "+ c1.calcularArea());
		
		
		
	}

}
