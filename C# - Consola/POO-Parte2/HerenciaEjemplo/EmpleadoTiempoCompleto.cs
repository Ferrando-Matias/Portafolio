using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace HerenciaEjemplo
{
    internal class EmpleadoTiempoCompleto : Empleado
    {
        public int Bonificacion { get; set; } // en porcentaje

        public EmpleadoTiempoCompleto(string nombre, int id, double salarioBase, int bonificacion) : base(nombre, id, salarioBase)
        {
            Bonificacion = bonificacion;
        }

        public override double CalcularSalario()
        {
            return SalarioBase + CalcularBonificacion();
        }

        public override void MostrarInformacion()
        {
            base.MostrarInformacion();
            Console.WriteLine($"Bonificación: {Bonificacion}% = {CalcularBonificacion()}");
        }
        public override double CalcularBonificacion()
        {
            // Bonificación específica para empleados a tiempo completo
            return SalarioBase * Bonificacion / 100;
        }
    }
}
