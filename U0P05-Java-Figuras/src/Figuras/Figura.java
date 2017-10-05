package Figuras;

public abstract class Figura {

	public String titulo;
	public Color color;
	
	public Figura (String titulo, Color color) {
		this.titulo=titulo;
		this.color=color;
	}
	
	public double calArea() {
		return 0;
	}
	public double calPerimetro() {
		return 0;
	}

	public String getTitulo() {
		return titulo;
	}

	public void setTitulo(String titulo) {
		this.titulo = titulo;
	}

	public Color getColor() {
		return color;
	}

	public void setColor(Color color) {
		this.color = color;
	}

	@Override
	public String toString() {
		return " Caracteristicas de la Figura [titulo=" + titulo + ", color=" + color + "]";
	}
	
}
